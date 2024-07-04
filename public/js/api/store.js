import { genericFetch } from './apiFetch.js';

export const storeGeneric = () => {
    const form = document.querySelector('.form');
    if (form) {
        form.addEventListener('submit', genericFetch);
    }
}
