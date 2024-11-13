<div class="settings-panel">
    <div class="settings-header">
        <h2>Themes</h2>
    </div>
    <div class="settings-content">
        <div class="row">
            <div class="col-3 col-md-3 col-lg-3">
                <button class="theme-box theme-gd-pink active" id="theme-gd-pink" data-value="theme-gd-pink" onclick="setTheme('theme-gd-pink')"></button>
            </div>
            <div class="col-3 col-md-3 col-lg-3">
                <button class="theme-box theme-gd-dark" id="theme-gd-dark" data-value="theme-gd-dark" onclick="setTheme('theme-gd-dark')"></button>
            </div>
            <div class="col-3 col-md-3 col-lg-3">
                <button class="theme-box theme-gd-blue" id="theme-gd-blue" data-value="theme-gd-blue" onclick="setTheme('theme-gd-blue')"></button>
            </div>
            <div class="col-3 col-md-3 col-lg-3">
                <button class="theme-box theme-gd-yellow" id="theme-gd-yellow" data-value="theme-gd-yellow" onclick="setTheme('theme-gd-yellow')"></button>
            </div>
            <div class="col-3 col-md-3 col-lg-3">
                <button class="theme-box theme-gd-dark-blue" id="theme-gd-dark-blue" data-value="theme-gd-dark-blue" onclick="setTheme('theme-gd-dark-blue')"></button>
            </div>
        </div>
    </div>
</div>
<div class="setting-btn flipInX">@svg('uni-setting-o')</div>

<script>
    function setTheme(theme) {
        document.body.className = '';
        document.body.classList.add(theme);
        localStorage.setItem('theme', theme);
        updateActiveThemeButton(theme)
    }

    function updateActiveThemeButton(theme) {
        // Remove active class from all theme buttons
        const buttons = document.querySelectorAll('.theme-box');
        buttons.forEach(button => button.classList.remove('active'));

        // Add active class to the selected theme button
        const activeButton = document.getElementById(theme);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }
</script>
