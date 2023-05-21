function toggleTheme() {
    // Toggle the theme class on the body element
    document.body.classList.toggle('dark-theme');

    // Update the theme preference in session storage
    var theme = document.body.classList.contains('dark-theme') ? 'dark' : 'light';
    sessionStorage.setItem('theme', theme);
  }

  // Check if the theme preference is set in session storage
  var theme = sessionStorage.getItem('theme');
  if (theme) {
    // Apply the stored theme preference
    document.body.classList.add(theme + '-theme');
  }