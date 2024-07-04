import { messageVoidTable } from '../message.js';
import { openModal, updateCustomerServiceDom, modalDelete } from '../modal/showModal.js';

export const changeFontColor = (status) => {

    if (status == 1) {
        return '#FFA500';
    }

    if (status == 2) {
        return '#32CD32';
    }

    if (status == 3) {
        return '#FF0000';
    }

    if (status == 4) {
        return '#0000ff';
    }

    if (status == 5) {
        return '#000';
    }

}

export const clearFilter = () => {

    $('#filter_payment_status').val('').trigger('change');
    $('#filter_service_status').val('').trigger('change');
    $('#filter_service_type').val('').trigger('change');

}

export const filterData = (all = null) => {

    let filterPaymentStatus = document.querySelector('#filter_payment_status').value;
    let filterServiceStatus = document.querySelector('#filter_service_status').value;
    let filterServiceType = document.querySelector('#filter_service_type').value;
    let idCustomer = 0;
    if (document.getElementById('id-customer')) {
        idCustomer = document.querySelector('#id-customer').value;
    }


    if (!filterPaymentStatus) {
        filterPaymentStatus = 0;
    }

    if (!filterServiceStatus) {
        filterServiceStatus = 0;
    }

    if (!filterServiceType) {
        filterServiceType = 0;
    }

    if (all) {
        filterPaymentStatus = 0;
        filterServiceStatus = 0;
        filterServiceType = 0;
    }

    return {
        route: `/api/filter-customer-service/${filterPaymentStatus}/${filterServiceStatus}/${filterServiceType}/${idCustomer}`,
        method: 'get',
        customMethod: 'getFilterData'
    };
}

export const getFilterData = (result = null) => {

    if (!result) {
        return {
            method: 'get'
        }
    } else {

        document.querySelector('#table-default tbody').remove();
        const tbody = document.createElement("tbody");
        tbody.setAttribute('id', 'tbody-default');
        document.getElementById('table-default').appendChild(tbody);

        if (result && result.hasOwnProperty('data') && result.data[0]) {

            for (var i = 0; i < result.data.length; i++) {

                const inputcreatedAt = document.createElement("input");
                const inputTelephone = document.createElement("input");
                const inputPayment = document.createElement("input");
                const inputDeliveryDate = document.createElement("input");
                const inputServiceId = document.createElement("input");
                const inputStatusId = document.createElement("input");
                const inputPaymentStatusId = document.createElement("input");
                const idUpdateService = document.createElement("input");
                const inputHidden = document.createElement('input');
                const inputresponsibleCollaboratorId = document.createElement('input');
                let colName;
                let colGender;

                inputHidden.setAttribute('id', 'there-is-data');
                inputHidden.setAttribute('type', 'hidden');
                inputHidden.setAttribute('value', result.data[i].id);
                inputHidden.setAttribute('name', result.data[i].id);

                idUpdateService.setAttribute('type', 'hidden');
                idUpdateService.setAttribute('id', `service_add_id-${result.data[i].id}`);
                idUpdateService.setAttribute('value', result.data[i].id);

                inputcreatedAt.setAttribute('type', 'hidden');
                inputcreatedAt.setAttribute('id', `created_at-${result.data[i].id}`);
                inputcreatedAt.setAttribute('value', result.data[i].created_at);

                inputresponsibleCollaboratorId.setAttribute('type', 'hidden');
                inputresponsibleCollaboratorId.setAttribute('id', `responsible_collaborator_id-${result.data[i].id}`);
                inputresponsibleCollaboratorId.setAttribute('value', result.data[i].responsible_collaborator_id);

                inputTelephone.setAttribute('type', 'hidden');
                inputTelephone.setAttribute('id', `telephone-${result.data[i].id}`);
                inputTelephone.setAttribute('value', result.data[i].telephone);

                inputPayment.setAttribute('type', 'hidden');
                inputPayment.setAttribute('id', `payment_date-${result.data[i].id}`);
                inputPayment.setAttribute('value', result.data[i].payment_date);

                inputDeliveryDate.setAttribute('type', 'hidden');
                inputDeliveryDate.setAttribute('id', `service_delivery_date-${result.data[i].id}`);
                inputDeliveryDate.setAttribute('value', result.data[i].service_delivery_date);

                inputServiceId.setAttribute('type', 'hidden');
                inputServiceId.setAttribute('id', `services_id-${result.data[i].id}`);
                inputServiceId.setAttribute('value', result.data[i].services_id);

                inputStatusId.setAttribute('type', 'hidden');
                inputStatusId.setAttribute('id', `status_service_id-${result.data[i].id}`);
                inputStatusId.setAttribute('value', result.data[i].status_service_id);

                inputPaymentStatusId.setAttribute('type', 'hidden');
                inputPaymentStatusId.setAttribute('id', `payment_status_id-${result.data[i].id}`);
                inputPaymentStatusId.setAttribute('value', result.data[i].payment_status_id);


                //Campos table tr

                const newRow = document.createElement('tr');
                newRow.setAttribute('id', `line-${result.data[i].id}`);

                colName = newRow.insertCell(0);
                colName.setAttribute('id', `name_service-${result.data[i].id}`);
                colName.setAttribute('value', result.data[i].nameService);
                colName.innerHTML = result.data[i].nameService;

                colName = newRow.insertCell(1);
                colName.setAttribute('id', `name_service_status-${result.data[i].id}`);
                colName.setAttribute('value', result.data[i].nameServiceStatus);
                colName.style = `color:${changeFontColor(result.data[i].status_service_id)};font-weight: bold;`;
                colName.innerHTML = result.data[i].nameServiceStatus;

                colName = newRow.insertCell(2);
                colName.setAttribute('id', `valor_service-${result.data[i].id}`);
                colName.setAttribute('value', result.data[i].valor_service);
                colName.innerHTML = result.data[i].valor_service;

                colName = newRow.insertCell(3);
                colName.setAttribute('id', `name_payment_status-${result.data[i].id}`);
                colName.setAttribute('value', result.data[i].namePaymentStatus);
                colName.style = `color:${changeFontColor(result.data[i].payment_status_id)};font-weight: bold;`;
                colName.innerHTML = result.data[i].namePaymentStatus;

                colName = newRow.insertCell(4);
                colName.setAttribute('id', `responsible_collaborator_name-${result.data[i].id}`);
                colName.setAttribute('value', result.data[i].responsible_collaborator_name);
                colName.innerHTML = result.data[i].responsible_collaborator_name;

                colGender = newRow.insertCell(5);
                colGender.innerHTML = `<i id-modal-open-customer="${result.data[i].id}" class="modal-open fa fa-edit update-icon"></i>`;

                const routeDelete = `/api/systems/erp/customer-service-destroy/${result.data[i].id}`;

                const colspan = '7';
                const messageModal = "Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?";
                const idName = `name_service-${result.data[i].id}`;
                const titleModal = "Deletar Serviço";
                const messageNotificationDelete = "Serviço deletado com sucesso!";

                colGender = newRow.insertCell(6);
                colGender.innerHTML = `<i delete-route-modal="${routeDelete}" size-colspan="${colspan}" message-modal="${messageModal}" name-id="${idName}" title-modal="${titleModal}" message-notification="${messageNotificationDelete}" id-modal-open="delete" class="modal-open fa fa-trash trash-icon"></i>`;

                updateListener(newRow);

                document.getElementById('tbody-default').prepend(newRow);
                document.getElementById('tbody-default').appendChild(inputcreatedAt);
                document.getElementById('tbody-default').appendChild(inputresponsibleCollaboratorId);
                document.getElementById('tbody-default').appendChild(inputTelephone);
                document.getElementById('tbody-default').appendChild(inputPayment);
                document.getElementById('tbody-default').appendChild(inputDeliveryDate);
                document.getElementById('tbody-default').appendChild(inputServiceId);
                document.getElementById('tbody-default').appendChild(inputStatusId);
                document.getElementById('tbody-default').appendChild(inputPaymentStatusId);
                document.getElementById('tbody-default').appendChild(idUpdateService);
                document.getElementById('tbody-default').appendChild(inputHidden);

            }
            messageVoidTable('7');
        } else {
            if (!document.getElementById('message-table-create')) {
                messageVoidTable('7');
            }

        }

    }

}



const updateListener = (newRow) => {
    newRow.addEventListener("click", function (e) {
        if (typeof e.target.getAttribute('id-modal-open') != 'object' && e.target.getAttribute('id-modal-open') == 'delete') {
            openModal(modalDelete(e));
        } else if (e.target.classList.contains("modal-open")) {
            openModal(updateCustomerServiceDom(e.target.getAttribute('id-modal-open-customer')));
        }
    });
}