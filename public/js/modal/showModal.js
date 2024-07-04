import { genericFetch } from '../api/apiFetch.js'



export const updateModal = (id, event = null) => {

    const columnsUpdate = event.target.getAttribute('columns-update');
    if (typeof columnsUpdate != 'object') {
        const arrayCols = columnsUpdate.split('.');

        let modal = 'update-modal';

        arrayCols.forEach(element => {

            if (element.includes('id')) {
                document.querySelector('#' + element).value = id;
            } else if (element.includes('modal')) {
                modal = element;
            } else {
                let idUpdate = element.substring(0, element.length - 1);

                if (element.includes('select')) {
                    const valElement = document.querySelector('#' + element + id).getAttribute('value');

                    let newOption;
                    if (valElement.includes('}]')) {

                        const parseValElement = JSON.parse(valElement);
                        document.getElementById(idUpdate + '_update').innerHTML = '';

                        let arrayRoles = [];
                        let i = 0;

                        parseValElement.forEach(itensPermissions => {

                            newOption = new Option(itensPermissions.name, itensPermissions.id, false, false);
                            $('#permissions_select_update').append(newOption).trigger('change');

                            arrayRoles[i] = itensPermissions.id;
                            i++;


                        });

                        $('#permissions_select_update').val(arrayRoles).trigger('change');

                    } else {
                        document.getElementById(idUpdate + '_update').innerHTML = '';
                        const arrayDataFunction = document.querySelector('#' + element + id).getAttribute('value').split('/');
                        newOption = new Option(arrayDataFunction[1], arrayDataFunction[0], false, false);
                        $('#' + idUpdate + '_update').append(newOption).trigger('change');
                    }

                } else {

                    if (idUpdate == 'valor_service') {

                        let valor = document.querySelector('#' + element + id).getAttribute('value');

                        if (String(valor).match(/\d/g).length <= 5) {
                            document.querySelector('#' + idUpdate + '_update').value = parseFloat(valor).toFixed(2)
                                .replace('.', ',')
                                .replace(/([0-9]*)([0-9]{3},*)/, '$1$2');
                        } else {

                            if (valor.includes(',')) {
                                document.querySelector('#' + idUpdate + '_update').value = valor;
                            } else {
                                document.querySelector('#' + idUpdate + '_update').value = parseFloat(valor).toFixed(2)
                                    .replace('.', ',')
                                    .replace(/([0-9]*)([0-9]{3},*)/, '$1.$2');
                            }

                        }


                    } else {
                        document.querySelector('#' + idUpdate + '_update').value = document.querySelector('#' + element + id).getAttribute('value');
                    }

                }
            }

        });

        return modal;
    }

}


export const updateCustomerServiceDom = (id) => {

    const serviceCreatedAt = document.querySelector('#created_at-' + id).getAttribute('value');
    const serviceTelephone = document.querySelector('#telephone-' + id).getAttribute('value');
    const servicePaymentDate = document.querySelector('#payment_date-' + id).getAttribute('value');
    const serviceDeliveryDate = document.querySelector('#service_delivery_date-' + id).getAttribute('value');
    let customerServiceValorService = document.querySelector('#valor_service-' + id).getAttribute('value');
    const idService = document.querySelector('#services_id-' + id).getAttribute('value');

    //Limpa selects
    document.getElementById('select-service-name').innerHTML = '';
    document.getElementById('select-status-service-customer-update').innerHTML = '';
    document.getElementById('select-payment-status-customer-update').innerHTML = '';
    document.getElementById('responsible_collaborator_update').innerHTML = '';
    //=============================================================================//

    //Pega valores para setar nos selects
    const paymentStatusId = document.querySelector('#payment_status_id-' + id).getAttribute('value');
    const idUpdateStatusPaymentName = document.querySelector('#name_payment_status-' + id).getAttribute('value');
    const statusServiceId = document.querySelector('#status_service_id-' + id).getAttribute('value');
    const idUpdateStatusServiceName = document.querySelector('#name_service_status-' + id).getAttribute('value');
    const idUpdateService = document.querySelector('#service_add_id-' + id).getAttribute('value');
    const idUpdateServiceName = document.querySelector('#name_service-' + id).getAttribute('value');
    const responsibleCollaboratorId = document.querySelector('#responsible_collaborator_id-' + id).getAttribute('value');
    const responsibleCollaboratorName = document.querySelector('#responsible_collaborator_name-' + id).getAttribute('value');
    //======================================================================================//


    document.querySelector('#create-customer-update').value = serviceCreatedAt;
    document.querySelector('#telephone-customer-update').value = serviceTelephone;
    document.querySelector('#payment-date-customer-update').value = servicePaymentDate;
    document.querySelector('#service-delivery-date-customer-update').value = serviceDeliveryDate;

    //Cria options e seta valores em selects
    const newOptionService = new Option(idUpdateServiceName, idService, false, false);
    $('#select-service-name').append(newOptionService).trigger('change');
    const newOptionStatusService = new Option(idUpdateStatusServiceName, statusServiceId, false, false);
    $('#select-status-service-customer-update').append(newOptionStatusService).trigger('change');
    const newOptionStatusPayment = new Option(idUpdateStatusPaymentName, paymentStatusId, false, false);
    $('#select-payment-status-customer-update').append(newOptionStatusPayment).trigger('change');
    const newOptionResponsibleCollaborator = new Option(responsibleCollaboratorName, responsibleCollaboratorId, false, false);
    $('#responsible_collaborator_update').append(newOptionResponsibleCollaborator).trigger('change');
    //=========================================================================================//

    document.querySelector('#valueService_update').value = parseFloat(customerServiceValorService).toFixed(2)
        .replace('.', ',')
        .replace(/([0-9]*)([0-9]{3},*)/, '$1$2');
    document.querySelector('#id-service-customer-update').value = idUpdateService;

    return 'update-customer-service';

}


export const modalDelete = (event, resultCheckDatabase = false) => {

    let modaDelete = document.getElementById('modal-delete');

    const deleteRoute = event.target.getAttribute('delete-route-modal');
    const messageNotification = event.target.getAttribute('message-notification');
    const titleModal = event.target.getAttribute('title-modal');
    const nameId = event.target.getAttribute('name-id');
    const sizeColspan = event.target.getAttribute('size-colspan');

    if (event.target.getAttribute('check-database') && !resultCheckDatabase) {
        genericFetch(event);
        return;
    }
    
    const name = document.querySelector('#' + nameId).getAttribute('value');
    let messageModal = false;
    if (resultCheckDatabase) {
        messageModal = resultCheckDatabase.data.message.replace("%cliente%", name);
    } else if (event.target.getAttribute('message-modal') && !resultCheckDatabase) {
        messageModal = event.target.getAttribute('message-modal').replace("%cliente%", name);
    }

    if (messageModal) {
        
        modaDelete.innerHTML = `<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">${titleModal}</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body text-center"><h5>${messageModal}</h5></div><div class="modal-footer"><button type="button" class="btn btn-outline-dark" data-dismiss="modal">Não</button><button size-colspan="${sizeColspan}" delete-route="${deleteRoute}" message-notification="${messageNotification}" type="button" class="btn btn-outline-danger">Sim</button></div></div></div>`;

        addModalButtonListener();

    }

    return 'modal-delete';
}


export const openModal = (id) => {
    $('#' + id).modal('show');
}


const addModalButtonListener = () => {
    let modalButton = document.querySelector(".btn-outline-danger");
    modalButton.addEventListener("click", (e) => {
        genericFetch(e);
    });
}

