import {bem,getTreeData} from 'util';

export const SiteFooter=(props)=>{
	const {className='site-footer',data}=props;
	const {site,sitemap}=data;
	const {Fragment,useState,useMemo,useCallback}=React;
	const classes=bem(className);
	const menuClasses=classes.footermenu;
	const subMenuClasses=classes.footermenu.submenu;
	
	const footerMenuItems=useMemo(()=>getTreeData(Object.values(sitemap).filter((item)=>item.footer_menu)),[]);
	const rewriteURL=useCallback((url)=>(url[0]==='/')?window.path_to_root+url.substr(1):url,[]);
	
	return (
		<div className={classes._body()}>
			<ul className={menuClasses()}>
			{footerMenuItems.map((item,index)=>(
				<li className={menuClasses.item({'has-children':item.children})} key={index}>
					<a href={rewriteURL(item.uri)} className={menuClasses.item._link()}>{item.title}</a>
					{item.children && (
						<ul className={subMenuClasses()}>
						{item.children.map((item,index)=>(
							<li className={subMenuClasses.item()} key={index}>
								<a href={rewriteURL(item.uri)} className={subMenuClasses.item._link()}>{item.title}</a>
							</li>
						))}
						</ul>
					)}
				</li>
			))}
			</ul>
			<div className={classes.copyright()}>{site.copyright}</div>
		</div>
	);
};