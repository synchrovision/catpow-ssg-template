import {News} from './News.jsx';

window.addEventListener('DOMContentLoaded',function(){
	document.querySelectorAll('.block-news').forEach((el)=>{
		ReactDOM.render(<News {...el.dataset}/>,el);
	});
});