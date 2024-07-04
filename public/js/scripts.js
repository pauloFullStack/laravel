import { redirectViews, maskPhone, maskCpf, maskDate, maskMoeda, handlingInput, myWorks, filter, clearFilter, modalOpen, modalOpenPerso, modalOpenDelete } from './listeners.js';
import { loadingJs } from './loading.js';
import { storeGeneric } from './api/store.js';
import { updateGeneric } from './api/update.js';

loadingJs();
redirectViews();
handlingInput();
maskPhone();
maskCpf();
maskMoeda();
maskDate();
storeGeneric();
updateGeneric();
myWorks();
filter();
clearFilter();
modalOpen();
modalOpenPerso();
modalOpenDelete();


//Carrega selects ao clicar, aqui faz todo parte dos selects
$(document).ready(function () {
    $('select').select2({

        ajax: {
            dataType: 'json',
            delay: 250,
            processResults: function (result) {
                return {
                    results: $.map(result.data, function (fields) {

                        if (fields.name_service) {
                            return {
                                id: fields.id,
                                text: fields.name_service,
                                valorService: fields.valor_service
                            };
                        } else if (fields.name) {
                            return {
                                id: fields.id,
                                text: fields.name
                            };
                        }

                    })
                };
            },
            data: function (params) {

                var query = {
                    q: params.term,
                };

                return query;
            },
        }
    });

});


$('#services_id, #select-customers-service-name').on('select2:select', function (e) {

    if (document.getElementById('select-customers-service-name')) {
        const data = e.params.data;
        if (data.id != '0') {
            document.querySelector("#value-customers-service").disabled = false;
            document.querySelector("#value-customers-service").value = parseFloat(e.params.data.valorService).toFixed(2)
                .replace('.', ',')
                .replace(/([0-9]*)([0-9]{3},*)/, '$1$2');
        } else if (data.id == '0') {
            document.querySelector("#value-customers-service").disabled = true;
            document.querySelector("#value-customers-service").value = '0';
        }
    } else if (document.getElementById('services_id')) {
        document.querySelector('#valor_service').value = parseFloat(e.params.data.valorService).toFixed(2)
            .replace('.', ',')
            .replace(/([0-9]*)([0-9]{3},*)/, '$1$2');
    }

});




