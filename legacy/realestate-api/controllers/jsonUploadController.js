import models from 'models'
import startCase from 'lodash/startCase'


const html =
  `<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="/api/json-upload/" enctype="multipart/form-data">
      <label for="file">Choose Scrapping JSON file</label>
      <br/>
      <br/>
      <input type="file" id="file" name="attachment"/>
      <br/>
      <br/>
      <button>Submit</button>
    </form>
  </body>
  </html>`


const seedPropertyDetail = async function () {
  const city = ['Chester', 'Clairton', 'Corry', 'Hazleton', 'Johnstown', 'Latrobe', 'Pittston', 'Sharon', 'Washington', 'Warren', 'Parker']
  const street = [
    'E Venango St', 'Eddington St', 'Erwin St', 'Gerry St', 'Harpers Pl', 'Inwood Ln', 'Kirkwood Rd', 'Linmore Ave', 'Marigold Ln',
    'Morning Glory Rd', 'N Convent Ln', 'Napfle St', 'Oak Lane Rd']
  const lat = 41
  const lng = 77
  const dummy = 'Lorem ipsum dolor sit amet consectetuer adipiscing elit Aenean commodo ligula eget dolor Aenean massa Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Donec quam felis ultricies nec pellentesque eu pretium quis sem Nulla consequat massa quis enim Donec pede justo fringilla vel aliquet nec vulputate eget arcu In enim justo rhoncus ut imperdiet a venenatis vitae justo Nullam dictum felis eu pede mollis pretium Integer tincidunt Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean leo ligula porttitor eu consequat vitae eleifend ac enim Aliquam lorem ante dapibus in viverra quis feugiat a tellus Phasellus viverra nulla ut metus varius laoreet Quisque rutrum Aenean imperdiet Etiam ultricies nisi vel augue Curabitur ullamcorper ultricies nisi Nam eget dui Etiam rhoncus Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum Nam quam nunc blandit vel luctus pulvinar hendrerit id lorem Maecenas nec odio et ante tincidunt tempus Donec vitae sapien ut libero venenatis faucibus Nullam quis ante Etiam sit amet orci eget eros faucibus tincidunt Duis leo Sed fringilla mauris sit amet nibh Donec sodales sagittis magna Sed consequat leo eget bibendum sodales augue velit cursus nunc'

  const dummyWords = dummy.split(' ');

  const getRandomDummyWord = () => dummyWords[parseInt(Math.random() * 1000) % dummyWords.length]

  for (let i = 0; i < 15; i++) {
    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'city',
      value: city[i % city.length]
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'zipcode',
      value: 15 + parseInt(Math.random() * 1000)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'neighborhood',
      value: getRandomDummyWord() + ' ' + getRandomDummyWord() + ' ' + getRandomDummyWord()
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'street',
      value: street[i % street.length]
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'lat',
      value: lat + Math.round(Math.random() * 10000) / 10000
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'lng',
      value: lng + Math.round(Math.random() * 10000) / 10000
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'address',
      value: getRandomDummyWord() + ' ' + getRandomDummyWord() + ' ' + getRandomDummyWord()
    })

    const price_dollar_sale = Math.round(Math.random() * 1000000) + 80000
    const price_dollar_rent = parseInt(price_dollar_sale / (Math.random() * 150) + 400)

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_dollar_sale',
      value: price_dollar_sale
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_dollar_rent',
      value: price_dollar_rent
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_euro_sale',
      value: parseInt(price_dollar_sale / 1.2)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_euro_rent',
      value: parseInt(price_dollar_rent / 1.2)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'bedrooms',
      value: parseInt(Math.random() * 4 + 2)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'bathrooms',
      value: parseInt(Math.random() * 2 + 1)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'garages',
      value: parseInt(Math.random() * 2 + 1)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'area',
      value: parseInt(Math.random() * 5000 + 1500)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'year',
      value: parseInt(Math.random() * 18 + 2000)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'ratings_count',
      value: parseInt(Math.random() * 30)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'ratings_value',
      value: Math.round(Math.random() * 5 * 100) / 100
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'published',
      value: parseInt(Math.random() * 10 + 2009) + '-' + parseInt(Math.random() * 12 + 1) + '-' + parseInt(Math.random() * 29)
    })

    await models.PropertyDetail.create({
      property_id: i + 1,
      name: 'views',
      value: parseInt(Math.random() * 150)
    })
  }
}


const seedGallery = async function () {
  const name = [
    'apartment', 'flat1', 'flat2', 'house1', 'house2', 'house3', 'office1', 'office2',
    'apartment', 'flat1', 'flat2', 'house1', 'house2', 'house3', 'office1'
  ]

  const imageCount = [
    5, 4, 5, 6, 4, 4, 6, 6,
    5, 4, 5, 6, 4, 4, 6
  ]

  for (let i = 0; i < 15; i++) {
    await models.PropertyGallery.create({
      property_id: i + 1,
      plan_id: i * 2 + 1,
      type: 'Image',
      small: 'uploads/properties/small/plan-1.jpg',
      medium: 'uploads/properties/medium/plan-1.jpg',
      big: 'uploads/properties/big/plan-1.jpg'
    })

    await models.PropertyGallery.create({
      property_id: i + 1,
      plan_id: i * 2 + 2,
      type: 'Image',
      small: 'uploads/properties/small/plan-2.jpg',
      medium: 'uploads/properties/medium/plan-2.jpg',
      big: 'uploads/properties/big/plan-2.jpg'
    })

    await models.PropertyGallery.create({
      property_id: i + 1,
      plan_id: 0,
      name: 'Video Overview',
      type: 'Video',
      small: 'uploads/properties/video/video-1.mp4'
    })

    for (let j = 0; j < imageCount[i]; j++) {
      await models.PropertyGallery.create({
        property_id: i + 1,
        plan_id: 0,
        type: 'Image',
        small: 'uploads/properties/small/' + name[i] + '-' + (j + 1) + '.jpg',
        medium: 'uploads/properties/medium/' + name[i] + '-' + (j + 1) + '.jpg',
        big: 'uploads/properties/big/' + name[i] + '-' + (j + 1) + '.jpg'
      })
    }
  }
}

export const showJsonUpload = async function (req, res) {
  // await seedPropertyDetail();
  // await seedGallery();
  res.setHeader("Content-Type", "text/html");
  res.send(html);
}


export const jsonUpload = function(req, res) {
  const scrape = req.files.scrape;
  const data = JSON.parse(scrape.data.toString());

  for (let companyName in data) {
    models.Company.findOrCreate({
      where: { name: companyName }
    })
    .then(([ company ]) => {
      for (let uuid in data[companyName]) {
        const propertyInformation = data[companyName]['Property Information'];
        const marketLandValuation = data[companyName]['Market Land Valuation'];
      }
    })
  }
}


const controller = {
  showJsonUpload,
  jsonUpload
}

export default controller;
