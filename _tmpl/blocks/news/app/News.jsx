import {bem} from 'util';

export const News=(props)=>{
	const {Fragment,useState,useMemo,useEffect}=React;
	const classes=useMemo(()=>bem('block-news'),[]);
	const navClasses=classes.nav;
	const itemsClasses=classes.items;
	
	const [data,setData]=useState();
	const [currentCat,setCurrentCat]=useState(false);
	
	const cats=useMemo(()=>{
		if(!data){return [];}
		return data.cats;
	},[data]);
	const items=useMemo(()=>{
		if(!data){return [];}
		return data.items;
	},[data]);
	
	useEffect(()=>{
		fetch(props.json).then((res)=>res.json()).then(setData);
	},[]);
	
	return (
		<Fragment>
			<ul className={navClasses()}>
				<li className={navClasses.item({'is-active':!currentCat})} onClick={()=>setCurrentCat(false)}>
					<span className={navClasses.item._label()}>All</span>
				</li>
				{Object.values(cats).map((cat)=>(
					<li className={navClasses.item({'is-active':cat===currentCat})} onClick={()=>setCurrentCat(cat)} style={{'--cat-color':cat.color}}>
						<span className={navClasses.item._label()}>{cat.label}</span>
					</li>
				))}
			</ul>
			<ul className={itemsClasses()}>
				{items.filter((item)=>!currentCat || item.cat===currentCat.slug).slice(0,8).map((item)=>(
					<li className={itemsClasses.item()} style={{'--cat-color':cats[item.cat].color}}>
						<a href={item.url} class={itemsClasses.item._link()}>
							<span className={itemsClasses.item.cat()}>{cats[item.cat].label}</span>
							<span className={itemsClasses.item.date()}>{item.date}</span>
							<span className={itemsClasses.item.title()}>{item.title}</span>
						</a>
					</li>
				))}
			</ul>
		</Fragment>
	);	
};