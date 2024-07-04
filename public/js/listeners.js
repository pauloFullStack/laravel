import { generateCurrentUrl } from './generateDynamicUrl.js'
import { focus, blur } from './functionsHandleInputs/functionsInput.js'
import { mask } from './functionsHandleInputs/functionsMasks.js'
import { genericFetch } from './api/apiFetch.js';
import { clearFilter as filterClear } from './api/filter.js';
import { updateModal, updateCustomerServiceDom, modalDelete, openModal } from './modal/showModal.js';



export const handlingInput = () => {

    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach((input) => {
        input.addEventListener("blur", (e) => blur(e.target));
        input.addEventListener("focus", (e) => focus(e.target));
    });
}


export const redirectViews = () => {
    const redirects = document.querySelectorAll('.redirect');
    redirects.forEach((redirect) => {
        redirect.addEventListener("click", (e) => {
            window.location = `${generateCurrentUrl()}${e.target.getAttribute('route')}`;
        });
    });
}


export const maskPhone = () => {
    const masksPhone = document.querySelectorAll('.mask-phone');
    masksPhone.forEach((maskPhone) => {
        maskPhone.addEventListener("keypress", (e) => mask(e.target, 'mphone'));
        maskPhone.addEventListener("onblur", (e) => mask(e.target, 'mphone'));
    });

}


export const maskCpf = () => {
    const masksCpf = document.querySelectorAll('.mask-cpf');
    masksCpf.forEach((maskCpf) => {
        maskCpf.addEventListener("keypress", (e) => mask(e.target, 'mCpf'));
        maskCpf.addEventListener("onblur", (e) => mask(e.target, 'mCpf'));
    });
}


export const maskMoeda = () => {
    const masksMoeda = document.querySelectorAll(".mask-moeda");
    masksMoeda.forEach((maskMoeda) => {
        maskMoeda.addEventListener("keypress", (e) => mask(e.target, 'mMoeda'));
        maskMoeda.addEventListener("onblur", (e) => mask(e.target, 'mMoeda'));
    });
}


export const maskDate = () => {
    const maskDates = document.querySelectorAll('.mask-date');
    maskDates.forEach((maskDate) => {
        maskDate.addEventListener("keypress", (e) => mask(e.target, 'mDate'));
        maskDate.addEventListener("onblur", (e) => mask(e.target, 'mDate'));
    });
}


export const myWorks = () => {
    const myWorks = document.querySelectorAll('.my-works');
    myWorks.forEach((myWork) => {
        myWork.addEventListener("click", (e) => {
            genericFetch(e);
        });
    });
}


export const filter = () => {
    const filters = document.querySelectorAll('.filter');
    filters.forEach((filter) => {
        filter.addEventListener("click", (e) => {
            genericFetch(e);
        });
    });
}


export const clearFilter = () => {
    const filter = document.querySelectorAll('.clear-filter');
    filter.forEach((clear) => {
        clear.addEventListener("click", (e) => {
            filterClear();
        });
    });
}

export const modalOpen = () => {
    const modalOpen = document.querySelectorAll('.modal-open');
    modalOpen.forEach((modal) => {
        modal.addEventListener("click", (e) => {
            openModal(updateModal(e.target.getAttribute('id-modal-open'), e));
        });
    });
}


export const modalOpenPerso = () => {
    const modalOpenPerso = document.querySelectorAll('.modal-open-perso');
    modalOpenPerso.forEach((modal) => {
        modal.addEventListener("click", (e) => {
            openModal(updateCustomerServiceDom(e.target.getAttribute('id-modal-open')));
        });
    });
}


export const modalOpenDelete = () => {
    const modalOpenDelete = document.querySelectorAll('.modal-open-delete');
    modalOpenDelete.forEach((modal) => {
        modal.addEventListener("click", (e) => {
            openModal(modalDelete(e));
        });
    });
}

