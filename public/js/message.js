export const messageVoidTable = (colspan = null) => {

    let td = false;
    if (document.getElementById('tbody-default')) {
        td = document.getElementById('tbody-default').getElementsByTagName('td').length;

        if (!td) {
            td = document.createElement("td");
            td.setAttribute('id', 'message-table-create');
            if (colspan) {
                td.setAttribute('colspan', colspan);
            } else {
                td.setAttribute('colspan', '5');
            }
            td.innerHTML = 'Nenhuma Informação';
            document.getElementById('table-default').appendChild(td);

        } else if (td > 0 && document.getElementById('there-is-data') && document.getElementById('message-table-create')) {
            document.querySelector('#message-table-create').remove();
        } else if (td > 0 && document.getElementById('there-is-data') && document.getElementById('message-table')) {
            document.querySelector('#message-table').remove();
        }
    }

}