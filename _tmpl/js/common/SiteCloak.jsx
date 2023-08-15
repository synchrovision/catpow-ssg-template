import {Cloak} from 'component';
import {bem} from 'util';

export const SiteCloak=(props)=>{
	const {className='site-cloak'}=props;
	const {useMemo,useState,useCallback,useRef,useEffect}=React;
	const classes=useMemo(()=>bem(className));
	const loaderClasses=classes.loader;
	
	const ref=useRef();
	const onComplete=useCallback(()=>{
		ref.current.parentElement.classList.add('is-complete');
	},[]);
	const rewriteURL=useCallback((url)=>(url[0]==='/')?window.path_to_root+url.substr(1):url,[]);
	
	return (
		<div className={classes._body()} ref={ref}>
			<Cloak className={loaderClasses()} onComplete={onComplete}>
				<img className={loaderClasses.logo()} src={rewriteURL("/images/logo.svg")} alt=""/>
			</Cloak>
		</div>
	);
};