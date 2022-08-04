import scroll from './locomotive';

const floatingLabels = () => {
  const formInputs = document.querySelectorAll(
    '.c-form-col input, .c-form-col textarea, .c-form-col select'
  );
  formInputs.forEach((input) => {
    input.addEventListener('focus', () => inputFocus(input));
    input.addEventListener('blur', () => inputBlur(input));
  });

  const inputFocus = (input) => {
    const label = input.closest('.c-form-col');
    label.classList.add('has-value');
  };

  const inputBlur = (input) => {
    const label = input.closest('.c-form-col');
    if (!input.value) {
      label.classList.remove('has-value');
    }
  };

  const wpcf7Elm = document.querySelector('.wpcf7');
  const uploadTrigger = document.getElementById('uploadbrowsebutton');
  const uploadField = document.getElementById('upload-button');

  if (uploadTrigger) {
    uploadTrigger.addEventListener('click', function () {
      uploadField.click();
    });

    uploadField.addEventListener('change', function () {
      uploadTrigger.value = uploadField.files[0].name;
    });
  }

  wpcf7Elm?.addEventListener(
    'wpcf7mailsent',
    () => {
      const formInputs = document.querySelectorAll(
        '.c-form-col input, .c-form-col textarea, .c-form-col select'
      );
      formInputs.forEach((input) =>
        input.closest('.c-form-col').classList.remove('has-value')
      );
      uploadTrigger.value = '';
    },
    false
  );

  function scrollUpdate(event) {
    wpcf7Elm?.addEventListener(
      event,
      () => {
        setTimeout(() => {
          scroll.update();
        }, 300);
      },
      false
    );
  }

  scrollUpdate('wpcf7submit');

  scrollUpdate('wpcf7invalid');
};

export default floatingLabels;
