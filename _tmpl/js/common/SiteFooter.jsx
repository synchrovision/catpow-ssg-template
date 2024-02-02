import {bem,getTreeData} from 'util';
import siteinfo from '../../json/site.json';
import sitemap from '../../json/sitemap.json';

export const SiteFooter=(props)=>{
	const {className='site-footer'}=props;
	const {Fragment,useState,useMemo,useCallback}=React;
	const classes=bem(className);
	const menuClasses=classes.footermenu;
	const subMenuClasses=classes.footermenu.submenu;
	
	const footerMenuItems=useMemo(()=>getTreeData(Object.values(sitemap).filter((item)=>item.footer_menu)),[]);
	
	return (
		<div className={classes._body()}>
			<ul className={menuClasses()}>
			{footerMenuItems.map((item,index)=>(
				<li className={menuClasses.item({'has-children':item.children})} key={index}>
					<a href={item.uri} className={menuClasses.item._link()}>{item.title}</a>
					{item.children && (
						<ul className={subMenuClasses()}>
						{item.children.map((item,index)=>(
							<li className={subMenuClasses.item()} key={index}>
								<a href={item.uri} className={subMenuClasses.item._link()}>{item.title}</a>
							</li>
						))}
						</ul>
					)}
				</li>
			))}
			</ul>
			<div className={classes.copyright()}>{siteinfo.copyright}</div>
		</div>
	);
};