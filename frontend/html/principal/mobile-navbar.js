class MobileNavbar {
    constructor(mobilemenu, navlist, navlinks) {
        this.mobilemenu = document.querySelector(mobilemenu);
        this.navlist = document.querySelector(navlist);
        this.navlinks = document.querySelectorAll(navlinks);
        this.activeclass = "active";

        this.handleclick = this. handleclick.bind(this);
    }

    animateLinks() {
        this.navlinks.forEach((link, index) => {
            console.log(index);
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = `navlinkFade 0.5s ease forwards $ {index / 7 + 0.3}s`);
        });
    }

    handleclick() {
        this.navlist.classList.toggle(this.activeclass);
        this.mobilemenu.classList.toggle(this.activeclass);
        this.animateLinks();
    }

    addclickevent() {
        this.mobilemenu.addEventListener("click", this.handleclick.bind(this));
    }

    init() {
        if (this.mobilemenu) {
            this.addclickevent();
        }
        return this;
    }
}

const mobilenavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li"
);
mobilenavbar.init();
