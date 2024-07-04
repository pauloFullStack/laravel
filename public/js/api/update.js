import { messageVoidTable } from '../message.js';
import { genericFetch } from './apiFetch.js';
import { generateCurrentUrl } from '../generateDynamicUrl.js';
import { openModal, updateModal, modalDelete, updateCustomerServiceDom } from '../modal/showModal.js';
import { changeFontColor } from './filter.js';



export const updateTable = (data, messageSuccess, customMethod, routeDelete, colspan, addColumn, updateFields, tbody, messageNotificationDelete, messageModal, titleModal, checkDatabaseParam, formType) => {

    if (formType && (typeof formType != "string")) {
        formType.reset();
        $('select').val(null).trigger('change');
    } else if (formType && (typeof formType == "string")) {
        $(`.${formType}`).trigger('reset');
    }

    let parameters = false;

    if (data && data.hasOwnProperty('original')) {
        parameters = data.parameters;
        data = data.original;
    }

    const id = data.id;

    if (!data.roles) {
        delete data.id;
    } else {
        delete data.roles;
        data = {
            index: data.id,
            name: data.name
        }
    }

    const newRow = document.createElement('tr');
    newRow.setAttribute('id', `line-${id}`);

    const inputHidden = document.createElement('input');
    inputHidden.setAttribute('id', 'there-is-data');
    inputHidden.setAttribute('type', 'hidden');
    inputHidden.setAttribute('value', id);
    inputHidden.setAttribute('name', id);

    let index = 0;
    let image = false;
    let idName = '';
    let colName;
    let colGender;

    Object.keys(data).forEach((item) => {

        if (document.querySelector(`#${item}`)) {
            document.querySelector(`#${item}`).style.cssText = 'border: #c0c0c0 solid 1px !important';
        }

        if (item != 'image' && item != 'code_image') {

            if (item.includes('select')) {
                const selectNameId = data[item].split('/');
                colName = newRow.insertCell(index);
                colName.setAttribute('id', item + '-' + id);
                colName.setAttribute('value', data[item]);
                colName.innerHTML = selectNameId[1];
            } else {
                colName = newRow.insertCell(index);
                colName.setAttribute('id', item + '-' + id);
                colName.setAttribute('value', data[item] ? data[item] : '');
                colName.innerHTML = data[item] ? data[item] : '';
            }

            index++;
        } else if (item == 'image') {
            image = data[item];
        }

        if (item == 'name_service' || item == 'name' || item == 'name-collaborator' || item == 'title') {
            idName = item + '-' + id;
        }

    });

    if (addColumn && addColumn == 'customer') {
        colGender = newRow.insertCell(index);
        const routeRedirect = `${generateCurrentUrl()}erp/customers/${id}`;
        colGender.innerHTML = `<a href="${routeRedirect}" class="btn btn-outline-primary"><i class="fas fa-briefcase"></i> <i class="fas fa-dollar-sign"></i></a>`;

        index++
    }

    if (addColumn && addColumn == 'employee') {

        colGender = newRow.insertCell(index);
        colGender.innerHTML = `<i columns-update="street-.district-.number-.city-.state-.update_employee_address_id.modal-update-collaborator-address" id-modal-open="${id}" class="modal-open fas fa-address-book"></i>`;

        index++

        colGender = newRow.insertCell(index);
        colGender.innerHTML = `<i columns-update="cpf-.bill-.agency-.operation-.update_employee_bank_id.modal-update-collaborator-bank" id-modal-open="${id}" class="modal-open far fa-money-bill-alt"></i>`;

        index++
    }

    colGender = newRow.insertCell(index);
    if (data && data.hasOwnProperty('responsible_collaborator_name')) {
        colGender.innerHTML = `<i id="update-${id}" columns-update="${updateFields}" id-modal-open-customer="${id}" class="modal-open fa fa-edit update-icon"></i>`;
    } else {
        colGender.innerHTML = `<i id="update-${id}" columns-update="${updateFields}" id-modal-open="${id}" class="modal-open fa fa-edit update-icon"></i>`;
    }

    const routeDeleteGeneric = routeDelete + id;

    index++;
    colGender = newRow.insertCell(index);

    if (checkDatabaseParam) {

        colGender.innerHTML = `<i delete-route-modal="${routeDeleteGeneric}" size-colspan="${colspan}" message-notification="${messageNotificationDelete}" check-database="${checkDatabaseParam}${id}" name-id="${idName}" id-modal-open="delete" title-modal="${titleModal}" class="modal-open fa fa-trash trash-icon"></i>`;

    } else {

        colGender.innerHTML = `<i delete-route-modal="${routeDeleteGeneric}" size-colspan="${colspan}" message-modal="${messageModal}" name-id="${idName}" title-modal="${titleModal}" message-notification="${messageNotificationDelete}" id-modal-open="delete" class="modal-open fa fa-trash trash-icon"></i>`;

    }

    updateListener(newRow);

    if (image) {

        index++;

        colName = newRow.insertCell(index);
        colName.setAttribute('id', `image-${id}`);
        colName.innerHTML = `<img width="70" height="70" src="${generateCurrentUrl()}storage/${image}" alt="">`;
    }

    document.getElementById(tbody).prepend(newRow);

    if (parameters) {

        Object.keys(parameters).forEach((itemParameters) => {

            const param = document.createElement("input");
            param.setAttribute('type', 'hidden');
            param.setAttribute('id', itemParameters + '-' + id);
            param.setAttribute('value', parameters[itemParameters]);
            document.getElementById(tbody).appendChild(param);

            if (itemParameters == 'status_service_id') {
                setColorStatusService(typesColors(), parameters[itemParameters], 'name_service_status', id);
            }

            if (itemParameters == 'payment_status_id') {
                setColorStatusService(typesColors(), parameters[itemParameters], 'name_payment_status', id);
            }

        });
    }

    document.getElementById(tbody).appendChild(inputHidden);
    toastr.success(messageSuccess);
    messageVoidTable(colspan);

}


export const updateGeneric = () => {

    const form = document.querySelector('.form_update');
    if (form) {
        form.addEventListener('submit', genericFetch);
    }

    const formUpdateEmployeBasic = document.querySelector('.form_update_employee_basic');
    if (formUpdateEmployeBasic) {
        formUpdateEmployeBasic.addEventListener('submit', genericFetch);
    }

    const formUpdateEmployeAddress = document.querySelector('.form_update_employee_address');
    if (formUpdateEmployeAddress) {
        formUpdateEmployeAddress.addEventListener('submit', genericFetch);
    }

    const formUpdateEmployeBank = document.querySelector('.form_update_employee_bank');
    if (formUpdateEmployeBank) {
        formUpdateEmployeBank.addEventListener('submit', genericFetch);
    }

}


export const updateDom = (result) => {

    if ((result.data && result.data.hasOwnProperty('original')) && (result.data.original && result.data.original.hasOwnProperty('image'))) {
        result.data = {
            id: result.data.original.id,
            image: result.data.original.image,
            position: result.data.original.position,
            title: result.data.original.title,
            code_image: result.data.parameters.code_image,
        };
    }

    let hiddenUpdate = false;
    if (result.data && result.data.hasOwnProperty('hidden_update')) {
        hiddenUpdate = true;
        result.data = result.data.hidden_update;
    }

    Object.keys(result.data).forEach((item) => {

        if (result.data[item] && result.data[item].includes('/')) {

            document.querySelector(`#${item}-${result.data['id']}`).setAttribute('value', result.data[item]);

            if (result.data[item].includes('</')) {
                document.querySelector(`#${item}-${result.data['id']}`).innerHTML = result.data[item] ? result.data[item] : '';
            } else {
                const nameFunction = result.data[item].split('/');
                document.querySelector(`#${item}-${result.data['id']}`).innerHTML = nameFunction[1];
            }

        } else if (item != 'id' && item != 'image') {
            if (item != 'code_image' && !hiddenUpdate && item != 'permissions_select') {
                document.querySelector(`#${item}-${result.data['id']}`).innerHTML = result.data[item] ? result.data[item] : '';
            }

            document.querySelector(`#${item}-${result.data['id']}`).setAttribute('value', result.data[item] ? result.data[item] : '');

        }

        if (item == 'image') {
            document.querySelector(`#${item}-${result.data['id']}`).innerHTML = `<img width="70" height="70" src="${generateCurrentUrl()}storage/${result.data[item]}" alt="">`;
        }

    });

}


const updateListener = (newRow) => {
    newRow.addEventListener("click", function (e) {
        if (e.target.classList.contains("modal-open")) {
            if (typeof e.target.getAttribute('id-modal-open') != 'object' && e.target.getAttribute('id-modal-open') != 'delete') {
                openModal(updateModal(e.target.getAttribute('id-modal-open'), e));
            } else if (typeof e.target.getAttribute('id-modal-open') != 'object' && e.target.getAttribute('id-modal-open') == 'delete') {
                openModal(modalDelete(e));
            } else if (typeof e.target.getAttribute('id-modal-open-customer') != 'object') {
                openModal(updateCustomerServiceDom(e.target.getAttribute('id-modal-open-customer')));
            }
        }
    });
}


export const postUpdateCustomerServiceDom = (result) => {

    document.querySelector('#payment_date-' + result.data.idService).setAttribute('value', result.data.paymentDate);

    document.querySelector('#responsible_collaborator_id-' + result.data.idService).setAttribute('value', result.data.responsible_collaborator_id);

    document.querySelector('#responsible_collaborator_name-' + result.data.idService).setAttribute('value', result.data.responsible_collaborator_name);
    document.querySelector('#responsible_collaborator_name-' + result.data.idService).innerHTML = result.data.responsible_collaborator_name;

    document.querySelector('#service_delivery_date-' + result.data.idService).setAttribute('value', result.data.serviceDeliveryDate);

    document.querySelector('#name_service-' + result.data.idService).innerHTML = result.data.serviceName;
    document.querySelector('#name_service-' + result.data.idService).setAttribute('value', result.data.serviceName);

    document.querySelector('#valor_service-' + result.data.idService).innerHTML = result.data.valorService;
    document.querySelector('#valor_service-' + result.data.idService).setAttribute('value', result.data.valorService);


    document.getElementById('name_service_status-' + result.data.idService).style.color = changeFontColor(result.data.statusServiceId);
    document.querySelector('#name_service_status-' + result.data.idService).innerHTML = result.data.statusServiceName;
    document.querySelector('#name_service_status-' + result.data.idService).setAttribute('value', result.data.statusServiceName);


    document.getElementById('name_payment_status-' + result.data.idService).style.color = changeFontColor(result.data.paymentStatusId);
    document.querySelector('#name_payment_status-' + result.data.idService).innerHTML = result.data.paymentStatusName;
    document.querySelector('#name_payment_status-' + result.data.idService).setAttribute('value', result.data.paymentStatusName);

    document.querySelector('#services_id-' + result.data.idService).setAttribute('value', result.data.serviceId);

}


function setColorStatusService(colors, value, id, idService) {
    for (let i = 0; i < colors.length; i++) {
        if (colors[i].id == value) {
            document.getElementById(`${id}-${idService}`).style = `color:${colors[i].color};font-weight: bold;`;
        }
    }
}


function typesColors() {
    return [
        { id: '1', color: '#FFA500' },
        { id: '2', color: '#32CD32' },
        { id: '3', color: '#FF0000' },
        { id: '4', color: '#0000ff' },
        { id: '5', color: '#000' }
    ];
}