import Tescik from "./test";
import Contact from "./contact.js";
import "./main.scss";
import "./GoogleMap.js";
import "./menu.js";
import Animation from "./animation";

// new Tescik().init();
document.querySelector('.main_contact') ? new Contact().init() : null
document.querySelector('.section-one') ? new Animation().init() : null
