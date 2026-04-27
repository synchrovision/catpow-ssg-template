import { Bem, Cloak } from "catpow/component";
import { useCallback, useRef } from "react";

import siteinfo from "../../json/site.json";

export const SiteCloak = (props) => {
	const { className = "site-cloak" } = props;
	const ref = useRef();

	const onComplete = useCallback(() => {
		ref.current?.parentElement?.classList?.add("is-complete");
	}, []);

	return (
		<Bem block={className}>
			<div className="_body" ref={ref}>
				<Cloak className="-loader" onComplete={onComplete}>
					<img className="_logo" src="/images/logo.svg" alt={siteinfo.title} />
				</Cloak>
			</div>
		</Bem>
	);
};
