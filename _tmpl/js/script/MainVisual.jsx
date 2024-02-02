import {Slider,RawNode,SVG,Flux,Honycomb,Star} from 'component';
import {bem} from 'util';

export const MainVisual=(props)=>{
	const {useMemo}=React;
	const classes=useMemo(()=>bem('cp-slider'),[]);
	
	return (
		<Slider className={classes('is-large')} loop={true} arrow={false} timer={true}>
			{props.slides.map((node)=><RawNode className={classes.item()} node={node}/>)}
		</Slider>
	);	
};