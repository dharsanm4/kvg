<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Document</title>
</head>

<body>

</body>
<style>
    /*=============== GOOGLE FONTS ===============*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    /*=============== VARIABLES CSS ===============*/
    :root {
        /*========== Colors ==========*/
        --hue: 240;
        --first-color: hsl(var(--hue), 16%, 18%);
        --first-color-alt: hsl(var(--hue), 16%, 12%);
        --title-color: hsl(var(--hue), 8%, 15%);
        --text-color: hsl(var(--hue), 8%, 35%);
        --body-color: hsl(var(--hue), 100%, 99%);
        --container-color: #FFF;

        /*========== Font and typography ==========*/
        --body-font: 'Poppins', sans-serif;
        --big-font-size: 1.5rem;
        --normal-font-size: .938rem;

        /*========== z index ==========*/
        --z-modal: 1000;
    }

    @media screen and (min-width: 968px) {
        :root {
            --big-font-size: 1.75rem;
            --normal-font-size: 1rem;
        }
    }

    /*=============== BASE ===============*/
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    button {
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
    }

    /* body {
            background-color: var(--body-color);
            color: var(--text-color);
            position: relative;
        } */

    button {
        cursor: pointer;
        border: none;
        outline: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    /*=============== MODAL ===============*/
    .container {
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .modal {
        /* height: 100vh; */
        display: grid;
        place-items: center;
    }

    .modal__button {
        display: inline-block;
        background-color: #0a2b3a;
        color: #FFF;
        padding: 1rem 1.25rem;
        border-radius: .5rem;
        transition: .3s;
    }

    .modal__button:hover {
        background-color: #320836;
    }

    .modal__container {
        position: absolute;
        top: 0;
        left: 0;
        background-color: hsla(var(--hue), 18%, 75%, .8);
        width: 100%;
        height: 100%;
        display: grid;
        align-items: flex-end;
        overflow: hidden;
        transition: all .3s;
        z-index: var(--z-modal);
        visibility: hidden;
        opacity: 0;

    }

    .modal__content {
        position: relative;
        background-color: var(--container-color);
        text-align: center;
        padding: 3rem 2rem 2rem;
        border-radius: 1rem 1rem 0 0;
        transition: all .3s;

        transform: translateY(10%);

    }

    .modal__img {
        width: 150px;
        margin-bottom: .75rem;
    }

    .modal__close {
        display: inline-flex;
        background-color: #7b0e85;
        border-radius: .25rem;
        color: #FFF;
        font-size: 1.5rem;
        position: absolute;
        top: 2rem;
        right: 2rem;
        cursor: pointer;
    }

    .modal__title {
        font-size: 1.4rem;
        color: var(--title-color);
        font-weight: 500;
    }

    .modal__description {
        margin-bottom: 1.5rem;
    }

    .modal__button-width {
        width: 50%;
    }

    .modal__button-link {
        display: block;
        margin: 1rem auto 0;
        background-color: transparent;
        color: var(--first-color);
        font-weight: 500;
    }

    /* Show modal */
    .show-modal {
        visibility: visible;
        opacity: 1;
    }


    .show-modal .modal__content {

        transform: translateY(0);


    }


    /*=============== BREAKPOINTS ===============*/
    /* For small devices */
    @media screen and (min-width: 576px) {
        .modal__content {
            margin: auto;
            width: 380px;
            border-radius: 1.25rem;
        }

        .modal__img {
            width: 170px;
        }
    }

    .reg {
        padding: 1rem;

        border-radius: 0.5rem;
        padding: 1rem 1.25rem;
        border: none;
        margin-top: 1rem;

        transition: .3s;
        width: 100%;
        margin-bottom: 1rem;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    .reg:focus {
        border: 0.5px solid #7b0e85;
        outline-offset: 0px;
        outline: none;
    }

    ::placeholder {
        color: #aaaaaa;
        font-size: 0.875rem;
    }
</style>

<section class="modal" style="">
    <button class="modal__button" id="open-modal">
        Open Modal
    </button>

    <div class="modal__container" id="modal-container">
        <div class="modal__content">
            <div class="modal__close close-modal" title="Close">
                <i class="bx bx-x"></i>
            </div>

            <i class='bx bxs-edit'></i>
            <h1 class="modal__title">Register Your Number</h1>

            <input type="text" placeholder="Enter Your Number" class="reg" />

            <button class="modal__button modal__button-width">Proceed <i class="bx bx-chevrons-right bx-fade-right"></i></button>
        </div>
    </div>
</section>
<script>
    /*=============== SHOW MODAL ===============*/
    const showModal = (openButton, modalContent) => {
        const openBtn = document.getElementById(openButton),
            modalContainer = document.getElementById(modalContent)

        if (openBtn && modalContainer) {
            openBtn.addEventListener('click', () => {
                modalContainer.classList.add('show-modal')
            })
        }
    }
    showModal('open-modal', 'modal-container')

    /*=============== CLOSE MODAL ===============*/
    const closeBtn = document.querySelectorAll('.close-modal')

    function closeModal() {
        const modalContainer = document.getElementById('modal-container')
        modalContainer.classList.remove('show-modal')
    }
    closeBtn.forEach(c => c.addEventListener('click', closeModal))
</script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

</html>