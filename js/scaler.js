if(document.ready){adjustRatio(document.getElementById('body-image').getElementsByTagName('img')[0]);}


function adjustRatio(img)
{
if(document.body.clientHeight < img.height)
{
img.style.height = '100%';
img.style.width = 'auto';
}
else if(document.body.clientWidth < img.width)
{
img.style.width = '100%';
img.style.height = 'auto';
}
}