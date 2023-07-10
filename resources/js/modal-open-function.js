//import bootstrap modal
import Modal from 'bootstrap/js/dist/modal';

export default window.showModalFunction = function (modalID) {
    window.thankYouModal = window.thankYouModal || new Modal(document.getElementById(modalID));
    window.thankYouModal.show();
}
