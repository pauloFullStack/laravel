import { messageVoidTable } from './message.js'

export const loadingJs = () => {
    document.addEventListener("DOMContentLoaded", function (e) {

        messageVoidTable(null);

        if (document.getElementById('loading-request')) {
            document.getElementById('loading-request').style.display = 'none';
        }

        document.getElementById('dashboard').style.display = 'none';
        // setTimeout(loadClose, 100);


    });
}


// function loadClose() {
//     document.getElementById('dashboard').style.display = 'none';
// }