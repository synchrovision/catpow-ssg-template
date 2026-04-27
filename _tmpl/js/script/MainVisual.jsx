import { Slider, RawNode, SVG, Flux, Honycomb, Star } from "catpow/component";
import { bem } from "catpow/util";

import { useMemo } from "react";

export const MainVisual = (props) => {
	const classes = useMemo(() => bem("cp-slider"), []);

	return (
		<Slider className={classes("is-large")} loop={true} arrow={false} timer={true}>
			{props.slides.map((node) => (
				<RawNode className={classes.item()} node={node} />
			))}
		</Slider>
	);
};
