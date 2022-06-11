const el = document.getElementById('custom-select1');

const all = document.getElementById('all');
const shs = document.getElementById('senior1');
const tertiary = document.getElementById('tertiary2');
const specify = document.getElementById('specify');

el.addEventListener('change', function handleChange(event) {
  if (event.target.value == 'none') {
    all.style.display = 'none';
  } else {
    all.style.display = 'block';
  }
  if (event.target.value == 'adenta') {
    shs.style.display = 'block';
  } else {
    shs.style.display = 'none';
  }
  if (event.target.value == 'east') {
    tertiary.style.display = 'block';
  } else {
    tertiary.style.display = 'none';
  }
  if (event.target.value == 'other') {
    specify.style.display = 'block';
  } else {
    specify.style.display = 'none';
  }
});