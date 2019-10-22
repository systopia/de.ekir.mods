(function()
{
    document.addEventListener(
        "DOMContentLoaded",
        function()
        {
            // Old menu:
            disableLogoutClassElements();
            // New menu (Civi 5.12+):
            disableLogoutListElements();
        }
    );

    function disableLogoutClassElements ()
    {
        const elements = document.getElementsByClassName('crm-logout-link');
        for (const element of elements)
        {
            element.style.display = 'none';
        }
    }

    function disableLogoutListElements ()
    {
        const civiMenu = document.getElementById('civicrm-menu');
        const elements = civiMenu.querySelectorAll('[data-name="Log out"]');
        for (const element of elements)
        {
            element.style.display = 'none';
        }
    }
})();
