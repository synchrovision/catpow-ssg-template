import { ready } from "catpow/util";
import { createRoot } from "react-dom/client";

import { SiteCloak } from "./SiteCloak.jsx";
import { SiteHeader } from "./SiteHeader.jsx";
import { SiteFooter } from "./SiteFooter.jsx";

ready(() => {
	createRoot(document.getElementById("SiteCloak")).render(<SiteCloak />);
	createRoot(document.getElementById("SiteHeader")).render(<SiteHeader />);
	createRoot(document.getElementById("SiteFooter")).render(<SiteFooter />);
});
