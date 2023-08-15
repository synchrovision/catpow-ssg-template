import {SiteCloak} from './SiteCloak.jsx';
import {SiteHeader} from './SiteHeader.jsx';
import {SiteFooter} from './SiteFooter.jsx';

window.addEventListener('DOMContentLoaded',function(){
	ReactDOM.render(<SiteCloak/>,document.getElementById('SiteCloak'));
	fetch(window.path_to_root+'json/siteinfo.json').then((res)=>res.json()).then((data)=>{
		ReactDOM.render(<SiteHeader data={data}/>,document.getElementById('SiteHeader'));
		ReactDOM.render(<SiteFooter data={data}/>,document.getElementById('SiteFooter'));
	});
});