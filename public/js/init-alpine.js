function data() {
    function getThemeFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem("darkMode")) {
            console.log(window.localStorage.getItem("darkMode"));
            return JSON.parse(window.localStorage.getItem("darkMode"));
        }

        // else return their preferences
        return (
            !!window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
        );
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem("darkMode", value);
        console.log(window.localStorage.getItem("darkMode"));
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark;
            setThemeToLocalStorage(this.dark);
        },
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen;
        },
        closeSideMenu() {
            this.isSideMenuOpen = false;
        },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
            console.log(this.isNotificationsMenuOpen);
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false;
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen;
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false;
        },
        isPagesMenuOpen:
            localStorage.getItem("active") === "ticket"
                ? localStorage.getItem("isPagesMenuOpen")
                : false,
        togglePagesMenu() {
            this.isPagesMenuOpen = !this.isPagesMenuOpen;
            this.isPagesMenuOpen2 = false;
            localStorage.setItem("isPagesMenuOpen", !this.isPagesMenuOpen);
            localStorage.setItem("isPagesMenuOpen2", false);
        },
        isPagesMenuOpen2:
            localStorage.getItem("active") === "faq"
                ? localStorage.getItem("isPagesMenuOpen")
                : false,
        togglePagesMenu2() {
            this.isPagesMenuOpen = false;
            this.isPagesMenuOpen2 = !this.isPagesMenuOpen2;
            localStorage.setItem("isPagesMenuOpen2", !this.isPagesMenuOpen2);
            localStorage.setItem("isPagesMenuOpen", false);
        },
        // Modal
        isModalOpen: false,
        trapCleanup: null,
        openModal() {
            this.isModalOpen = true;
            this.trapCleanup = focusTrap(document.querySelector("#modal"));
        },
        closeModal() {
            this.isModalOpen = false;
            this.trapCleanup();
        },
    };
}
