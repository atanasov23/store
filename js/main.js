fetch("http://127.0.0.1/cms/getStoreTitle")
  .then((data) => data.text())
  .then((title) => {
    console.log(title);
    document.getElementsByTagName("title")[0].textContent = title;
  });
