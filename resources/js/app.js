import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/bundle';

const swiperMyWorks = new Swiper(".myWorks", {
    slidesPerView: 3,
    spaceBetween: 30,
    modules: [Pagination],
});

const swiperCertificados = new Swiper('.mySwiperCertificados', {
    grabCursor: true,
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: ["-20%", 0, -1],
        },
        next: {
            translate: ["100%", 0, 0],
        },
    },
});