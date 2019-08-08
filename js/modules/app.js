import MenuAnimation from "./menu-animation.js"
import Slides from "./slides.js"
import Form from "./form.js"
import FilterByTag from "./pesquisas.js"
import Footer from "./footer.js"
import FormCancel from "./form-cancel.js"
import MascaraForm from "./mascara-form.js"
import ScrollToTop from "./scroll-to-top.js"
import Accordion from "./accordion.js"

MenuAnimation()
ScrollToTop()
Slides()
FilterByTag()
Footer()
Accordion('[data-anime="accordion"] .services-item')
Form()
FormCancel()
MascaraForm()