import {Cloak} from 'component';
import siteinfo from '../../json/site.json';
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
	
	return (
		<div className={classes._body()} ref={ref}>
			<Cloak className={loaderClasses()} onComplete={onComplete}>
				<img className={loaderClasses.logo()} src="/images/logo.svg" alt={siteinfo.title}/>
			</Cloak>
		</div>
	);
};