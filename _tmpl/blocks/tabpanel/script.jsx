import { ready } from "catpow/util";
import { tabpanel } from "catpow/ui";

ready(() => {
	document.querySelectorAll(".block-tabpanel__tabs").forEach((tabs) => {
		tabpanel(tabs, tabs.nextElementSibling, { initialOpen: 0 });
	});
});
