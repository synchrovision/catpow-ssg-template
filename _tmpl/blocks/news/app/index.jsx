import { createRoot } from "react-dom/client";
import { News } from "./News.jsx";

window.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".block-news").forEach((el) => {
		createRoot(el).render(<News {...el.dataset} />);
	});
});
