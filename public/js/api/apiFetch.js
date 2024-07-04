import { removeElementLine } from './removeElement.js';
import { headersPerso } from './header.js';
import { updateTable, updateDom, postUpdateCustomerServiceDom } from './update.js';
import { generateNotification } from './notification.js';
import { modalDelete, openModal } from '../modal/showModal.js';
import { filterData, getFilterData } from './filter.js'

export const genericFetch = (event) => {

    event.preventDefault();

    document.getElementById('loading-request').style.display = 'block';

    let formType = false;
    let checkDatabase = false;
    let data = null;
    let putMethodUpdate = false;
    let notForm = false;
    let formData = false;
    let routeDeleteElement = false;
    let filter = false;
    let concatError = false;
    let tbody = 'tbody-default';
    let customMethod = false;
    let methodGet = false;
    let messageNotification = false;
    let messageSuccess = false;
    let sizeColspan = false;
    let messageNotificationDelete = false;
    let messageModal = false;
    let routeDelete = false;
    let updateFields = false;
    let titleModal = false;
    let colspan = false;
    let addColumn = false;
    let checkDatabaseParam = false;
    let headers;
    let route;
    let method;

    if (event.target.getAttribute('form-type')) {
        formType = event.target.getAttribute('form-type');
    }

    if (event.target.getAttribute('check-database') && event.target.getAttribute('check-database') != '0') {
        checkDatabase = true;
        route = event.target.getAttribute('check-database');
        method = 'get';
        methodGet = true;
        customMethod = 'modalDelete';
    }

    if (event.target.getAttribute('not-form-type-request')) {
        notForm = true;
        putMethodUpdate = true;
        route = event.target.getAttribute('not-form-route');
        method = event.target.getAttribute('not-form-type-request');
        const dataWork = {
            work_status: event.target.getAttribute('not-form-value'),
            id: event.target.getAttribute('not-form-paramenter')
        };
        customMethod = event.target.getAttribute('not-form-method-redirect');
        headers = headersPerso();
        data = JSON.stringify(dataWork);
        messageSuccess = 'Status atualizado com sucesso!';
    }

    if (event.target.getAttribute('generates-form-data')) {
        formData = generatesFormDataDynamic(event);
    }

    if (event.target.getAttribute('delete-route')) {
        routeDeleteElement = event.target.getAttribute('delete-route');
        messageNotification = event.target.getAttribute('message-notification');
        sizeColspan = event.target.getAttribute('size-colspan') == '0' ? null : event.target.getAttribute('size-colspan');
        method = 'delete';

    }


    if (event.target.getAttribute('filter')) {

        filter = true;
        let getobjectFilter;
        if (event.target.getAttribute('filter-all')) {
            getobjectFilter = filterData(true);
        } else {
            getobjectFilter = filterData(null);
        }

        const objectFilter = getobjectFilter;
        customMethod = objectFilter.customMethod;
        route = objectFilter.route;
        method = objectFilter.method;

    }

    if (!routeDeleteElement && !filter && !notForm && !checkDatabase) {

        let form = event.target.getAttribute('class');
        let formGetData = document.querySelector(`.${form}`);

        formData = new FormData(formGetData);
        formType = formGetData;

        if (form == 'form_update' && !formData) {
            concatError = 'update';
        }

        if (formData.get('tbody')) {
            tbody = formData.get('tbody');
        }

        //Atributos delete
        messageNotificationDelete = formData.get('message_notification') ? formData.get('message_notification') : null;
        messageModal = formData.get('message_modal') ? formData.get('message_modal') : null;
        titleModal = formData.get('title_modal') ? formData.get('title_modal') : null;
        checkDatabaseParam = formData.get('check_database') ? formData.get('check_database') : false;

        route = formData.get('route');
        method = formData.get('method');
        messageSuccess = formData.get('message_success');
        customMethod = formData.get('custom_method');
        routeDelete = formData.get('route_delete') ? formData.get('route_delete') : false;
        updateFields = formData.get('update-fields');
        colspan = formData.get('colspan') == '0' ? null : formData.get('colspan');
        addColumn = formData.get('add_column') ? formData.get('add_column') : false;

        if (method == 'put' || method == 'put_img') {
            putMethodUpdate = true;
        }

        formData.delete('route');
        formData.delete('method');
        formData.delete('message_success');
        formData.delete('custom_method');
        formData.delete('route_delete');
        formData.delete('update-fields');
        formData.delete('colspan');
        formData.delete('message_notification');
        formData.delete('check_database');
        formData.delete('message_modal');
        formData.delete('title_modal');

        if (document.getElementById('permissions') && method == 'post') {
            formData.delete('permissions');
            formData.set('permissions', JSON.stringify($('#permissions').val()));
        } else if (document.getElementById('permissions_select_update') && method == 'put') {
            formData.delete('permissions');
            formData.set('permissions', JSON.stringify($('#permissions_select_update').val()));
        }


        if (method == 'post_img' || method == 'put_img') {

            const image = document.getElementsByName('image')[0];
            formData.append('image', image.files[0]);
            data = formData;
            headers = headersPerso(true);
            method = 'post';


        } else {

            headers = headersPerso();
            data = JSON.stringify(Object.fromEntries(formData));

        }


    } else if (!filter && !notForm && !checkDatabase) {

        headers = headersPerso();
        route = routeDeleteElement;

    }

    fetch(route, {

        method: method,
        body: data,
        dataType: 'json',
        headers: headers

    }).then(function (response) {
        return response.text();
    }).then(function (result) {

        const message = JSON.parse(result);

        if (message.data && message.data.hasOwnProperty('errors')) {
            document.getElementById('loading-request').style.display = 'none';
            generateNotification(message.data.errors, concatError);
            return;
        }

        if (message && message.hasOwnProperty('data')) {

            document.getElementById('loading-request').style.display = 'none';

            if (putMethodUpdate) {

                if (message.data && message.data.hasOwnProperty('idService')) {
                    postUpdateCustomerServiceDom(message);
                    toastr.success(messageSuccess);
                    return;
                }

                if (message.data && message.data.hasOwnProperty('work_status')) {
                    updateWorkStatus(message);
                    toastr.success(messageSuccess);
                    return;
                }

                updateDom(message);
                toastr.success(messageSuccess);
                return;
            }

            if (methodGet) {
                openModal(modalDelete(event, message));
                return;
            }

            if (routeDeleteElement) {
                removeElementLine(message, messageNotification, sizeColspan);
                return;
            }

            if (filter) {
                getFilterData(message);
                return;
            }

            updateTable(message.data, messageSuccess, customMethod, routeDelete, colspan, addColumn, updateFields, tbody, messageNotificationDelete, messageModal, titleModal, checkDatabaseParam, formType);
            return;

        } else if (message && message.hasOwnProperty('errors')) {
            document.getElementById('loading-request').style.display = 'none';
            generateNotification(message.errors, concatError);
        } else {
            document.getElementById('loading-request').style.display = 'none';
        }


    });

}


function generatesFormDataDynamic(eventGenerates) {

    const form = document.querySelector('.' + eventGenerates.target.getAttribute('form-type'));
    return new FormData(form);


}


function updateWorkStatus(result) {

    let workIniciado = document.getElementById('status_work_iniciado-' + result.data.id);
    let workParado = document.getElementById('status_work_parado-' + result.data.id);
    let workConcluido = document.getElementById('status_work_concluido-' + result.data.id);

    workIniciado.style = 'color: #a39999 !important';
    workParado.style = 'color: #a39999 !important';
    workConcluido.style = 'color: #a39999 !important';

    if (result.data.work_status == 5 || result.data.work_status == 3) {
        workParado.style = 'color: #ff0000 !important';
    } else if (result.data.work_status == 4) {
        workIniciado.style = 'color: #0000ff !important';
    } else if (result.data.work_status == 2) {
        workConcluido.style = 'color: #00ff00 !important';
    }

}