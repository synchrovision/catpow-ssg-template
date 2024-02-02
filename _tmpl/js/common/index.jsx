import {SiteCloak} from './SiteCloak.jsx';
import {SiteHeader} from './SiteHeader.jsx';
import {SiteFooter} from './SiteFooter.jsx';

window.addEventListener('DOMContentLoaded',function(){
	ReactDOM.render(<SiteCloak/>,document.getElementById('SiteCloak'));
	ReactDOM.render(<SiteHeader/>,document.getElementById('SiteHeader'));
	ReactDOM.render(<SiteFooter/>,document.getElementById('SiteFooter'));
});