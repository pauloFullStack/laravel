export const headersPerso = (header = false) => {

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!header) {
        return {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        }
    }

    return {
        "Accept": "application/json, text-plain, */*",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-TOKEN": token
    }

}