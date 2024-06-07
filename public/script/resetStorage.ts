import { killLocalStorage } from "./contactFormLocalStorage.js";
const excludedPages = ['/binary_back/contact', '/binary_back/admin'];


if (!excludedPages.includes(window.location.pathname)) {
    killLocalStorage();
}