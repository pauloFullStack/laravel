export const generateCurrentUrl = () => {
    let urlAtual = window.location.href;
    const arrayUrl = urlAtual.split('/');
    return arrayUrl[0] + '//' + arrayUrl[2] + '/';
}