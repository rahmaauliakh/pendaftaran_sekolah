import './bootstrap';

const galleryLightbox = document.querySelector('[data-gallery-lightbox]');

if (galleryLightbox) {
    const lightboxImage = galleryLightbox.querySelector('[data-gallery-lightbox-image]');
    const lightboxTitle = galleryLightbox.querySelector('[data-gallery-lightbox-title]');
    const lightboxDescription = galleryLightbox.querySelector('[data-gallery-lightbox-description]');
    const closeButton = galleryLightbox.querySelector('[data-gallery-close]');

    document.querySelectorAll('[data-gallery-item]').forEach((card) => {
        const openButton = card.querySelector('[data-gallery-open]');
        const image = card.querySelector('.gallery-image');

        if (!openButton || !image) {
            return;
        }

        const markImageUnavailable = () => {
            card.classList.add('is-missing');
            openButton.disabled = true;
        };

        image.addEventListener('error', markImageUnavailable, { once: true });

        if (image.complete && image.naturalWidth === 0) {
            markImageUnavailable();
        }

        openButton.addEventListener('click', () => {
            if (openButton.disabled) {
                return;
            }

            lightboxImage.src = image.currentSrc || image.src;
            lightboxImage.alt = image.alt;
            lightboxTitle.textContent = card.dataset.title || image.alt;
            lightboxDescription.textContent = card.dataset.description || '';

            if (typeof galleryLightbox.showModal === 'function') {
                galleryLightbox.showModal();
            } else {
                galleryLightbox.setAttribute('open', '');
            }
        });
    });

    closeButton?.addEventListener('click', () => {
        galleryLightbox.close();
    });

    galleryLightbox.addEventListener('click', (event) => {
        if (event.target === galleryLightbox) {
            galleryLightbox.close();
        }
    });

    galleryLightbox.addEventListener('close', () => {
        lightboxImage.removeAttribute('src');
    });
}

document.querySelectorAll('[data-fallback-image]').forEach((image) => {
    const markImageUnavailable = () => image.parentElement?.classList.add('is-missing');

    image.addEventListener('error', markImageUnavailable, { once: true });

    if (image.complete && image.naturalWidth === 0) {
        markImageUnavailable();
    }
});
