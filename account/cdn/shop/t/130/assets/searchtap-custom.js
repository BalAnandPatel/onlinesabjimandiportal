function waitForDOMRendered(callback) {
  if (document.readyState === 'complete') {
    // If the DOM is already fully rendered, execute the callback immediately.
    callback();
  } else {
    // Otherwise, schedule the callback to run on the next frame render.
    requestAnimationFrame(function() {
      waitForDOMRendered(callback);
    });
  }
}

// Usage:
waitForDOMRendered(function() {
  
  let searchInputBoxSelector = document.querySelectorAll(
    ".st-search-box"
  );
  searchInputBoxSelector.forEach((searchBox) => {
    if(searchBox && searchBox.querySelector("input[name='q']")){
      var searchInputBox = searchBox.querySelector("input[name='q']");
      searchInputBox.addEventListener('input', function() {
        var commonText = searchBox.querySelector('.common-text');
        var uniqueTextElement = searchBox.querySelector('.text-container-searchbar');
        if(searchInputBox.value.length > 0) {
          commonText.textContent = '';
          uniqueTextElement.style.display = 'none';
        } else {   
          commonText.textContent = 'Search for';
          uniqueTextElement.style.display = 'inline-block';
        }
      })
    }
  })
});