const fs = require('fs');

const icons = [
  // Web Dev
  'react', 'nextdotjs', 'tailwindcss', 'astro', 'nodedotjs', 'wordpress', 'shopify', 'typescript',
  // Mobile App
  'flutter', 'swift', 'kotlin', 'firebase',
  // Design & Motion
  'figma', 'sketch', 'adobephotoshop', 'adobeillustrator', 'adobeaftereffects', 'lottiefiles',
  // Marketing & SEO
  'googleanalytics', 'googleads', 'semrush', 'ahrefs', 'hubspot', 'mailchimp'
];

async function fetchIcons() {
  const result = {};
  for (const icon of icons) {
    try {
      const response = await fetch(`https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/${icon}.svg`);
      if (response.ok) {
        const svgText = await response.text();
        const match = svgText.match(/d="([^"]+)"/);
        if (match) {
          result[icon] = match[1];
        } else {
          result[icon] = svgText;
        }
      } else {
        console.error(`Failed to fetch ${icon}: ${response.statusText}`);
      }
    } catch (e) {
      console.error(`Error fetching ${icon}:`, e);
    }
  }
  
  fs.writeFileSync('scratch/icons.json', JSON.stringify(result, null, 2));
  console.log('Successfully written to scratch/icons.json');
}

fetchIcons();
