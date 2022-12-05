import {Nav,Menu,MainMenu,SubMenu,SubMenuContents,MenuItem} from 'component';
import {bem,getTreeData,getChildrensOfLevel} from 'util';

import sitemap from '../../json/sitemap.json';

export const SiteHeader=(props)=>{
	const {className='site-header'}=props;
	const {Fragment,useState,useMemo,useCallback,useReducer,useEffect}=React;
	const classes=bem(className);
	
	const [open,setOpen]=useState(false);
	
	const menus=useMemo(()=>{
		const menuItems=Object.values(sitemap);
		return {
			headerMenu:getTreeData(menuItems.filter((item)=>item.header_menu)),
			primaryMenu:getTreeData(menuItems.filter((item)=>item.primary_menu))
		};
	},[]);
	
	return (
		<Nav menus={menus}>
			<div className={classes._body()}>
				<div className={classes.button('is-' + (open?'open':'close'))} onClick={()=>setOpen(!open)}>
					<div className={classes.button._icon()}></div>
				</div>
				<h1 className={classes.logo()}>
					<a href="/"> 
						<img className={classes.logo._image()} src="/images/logo.svg" alt="" width="400" height="100"/>
					</a>
				</h1>
				<Menu className={classes.headermenu('is-' + (open?'open':'close'))} menu={menus.headerMenu}>
					<MainMenu className={classes.headermenu.mainmenu()}>
					{menus.headerMenu.map((item,index)=>{
						const itemClasses=classes.headermenu.mainmenu.item;
						return (
							<MenuItem className={itemClasses()} item={item} key={index}>
								<a href={item.uri} className={itemClasses._link()}>
									<span className={itemClasses._link.title()}>{item.title}</span>
									<span className={itemClasses._link.alt()}>{item.alt}</span>
								</a>
							</MenuItem>
						);
					})}
					</MainMenu>
					<SubMenu className={classes.headermenu.submenu()} level={1}>
					{menus.headerMenu.filter((item)=>item.children).map((item)=>{
						const menuClasses=classes.headermenu.submenu;
						return (
							<SubMenuContents className={menuClasses.contents()} parent={item}>
							{item.children.map((item,index)=>(
								<MenuItem className={menuClasses.item()} item={item} key={index}>
									<a href={item.uri} className={menuClasses.item._link()}>
										<span className={menuClasses.item._link.title()}>{item.title}</span>
										<span className={menuClasses.item._link.desc()}>{item.desc}</span>
										<img className={menuClasses.item._link.image()} src={"/images/menu_image.jpg"} alt={item.title}/>
									</a>
								</MenuItem>
							))}
							</SubMenuContents>
						);
					})}
					</SubMenu>
				</Menu>
				<Menu className={classes.primarymenu()} menu={menus.primaryMenu}>
				{menus.primaryMenu.map((item,index)=>{
					const itemClasses=classes.primarymenu.item;
					return (
						<MenuItem className={itemClasses()} item={item} key={index}>
							<a href={item.uri} className={itemClasses._link('is-link-'+item.slug)}>
								<span className={itemClasses._link.title()}>{item.title}</span>
							</a>
						</MenuItem>
					);
				})}
				</Menu>
			</div>
		</Nav>
	);
};