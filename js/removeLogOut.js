(function()
{
    document.addEventListener(
        "DOMContentLoaded",
        function()
        {
            // Disable all logout links:
            const elements = document.getElementsByClassName('crm-logout-link');
            for (const element of elements)
            {
                element.style.display = 'none';
            }
        }
    );
})();
