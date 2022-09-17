export function getPropertyFormatted (property) {
    return Promise.all([
      property.getUser(),
      property.getType(),
      property.getStatus(),
      property.getFeatures(),
      property.getAdditionalFeatures(),
      property.getGalleries(),
      property.getPlans(),
      property.getDetail()
    ]).then(([
      propertyUser,
      propertyType,
      propertyStatus,
      propertyFeatures,
      propertyAdditionalFeatures,
      propertyGalleries,
      propertyPlans,
      propertyDetail
    ]) => Promise.all([
      propertyUser,
      propertyType,
      propertyStatus,
      propertyFeatures,
      propertyAdditionalFeatures,
      propertyGalleries,
      propertyPlans,
      propertyDetail,
      Promise.all(propertyGalleries.map(g => g.getAttachment()))
    ])).then(([
      propertyUser,
      propertyType,
      propertyStatus,
      propertyFeatures,
      propertyAdditionalFeatures,
      propertyGalleries,
      propertyPlans,
      propertyDetail,
      propertyAttachments
    ]) => {
      const gallery = []
      const videos = []
      const planImages = []
  
      propertyGalleries.forEach((item, key) => {
        const { small, medium, big} = propertyAttachments[key].getFullUrls()
        
        if (item.plan_id) {
          planImages.push({
            id: item.plan_id,
            image: small || medium || big
          });
        } else if (item.type === 'Image') {
          gallery.push({ small, medium, big });
        } else {
          videos.push({
            name: item.name,
            link: small || medium || big
          });
        }
      });
  
      const plans = propertyPlans.map(plan => {
        const image = planImages.filter(({ id }) => id === plan.id);
        return {
          name: plan.name,
          desc: plan.description,
          rooms: plan.rooms,
          baths: plan.baths,
          image: image.length ? process.env.API_URL + image[0].image : undefined, 
          area: {
            value: plan.area,
            unit: 'ft'
          }
        }
      })
  
      return {
        id: property.id,
        title: property.title,
        description: property.description,
        featured: property.featured,
        type: propertyType ? propertyType.name : undefined,
        status: propertyStatus.map(status => status.name),
        features: propertyFeatures.map(feature => feature.name),
        additional_features: propertyAdditionalFeatures.map(({ name, value }) => ({ name, value })),
        updated_at: property.updated_at,
        company_id: propertyUser.company_id,
        gallery,
        videos,
        plans,
        ...propertyDetail
      }
    }).then(data => ({
      id: data.id,
      uuid: data.uuid,
      title: data.title,
      desc: data.description,
      propertyType: data.type,
      propertyStatus: data.status,
      city: data.city,
      zipCode: data.zipcode,
      neighborhood: data.neighborhood,
      street: data.street,
      location: { lat: data.lat, lng: data.lng },
      formattedAddress: data.formattedAddress,
      features: data.features,
      featured: data.featured,
      company_id: data.company_id,
      priceDollar: {
        sale: data.price_dollar_sale,
        rent: data.price_dollar_rent,
      },
      priceEuro: {
        sale: data.price_euro_sale,
        rent: data.price_euro_rent
      },
      bedrooms: data.bedrooms,
      bathrooms: data.bathrooms,
      garages: data.garages,
      area: {
        value: data.area,
        unit: 'ft²'
      },
      yearBuilt: data.year,
      ratingsCount: data.ratings_count,
      ratingsValue: data.ratings_value,
      additionalFeatures: data.additional_features,
      gallery: data.gallery,
      plans: data.plans,
      videos: data.videos,
      published: data.published,
      views: data.views,
      lastUpdate: data.updated_at
    }))
  }

export const getUserFormatted = function (user) {
  return Promise.all([
    user,
    user.getProfile(),
    user.getCompany()
  ]).then(([ user, profile, company ]) => {
    return {
      id: user.id,
      email: user.email,
      company_id: user.company_id,
      company: company.name,
      user_type: user.user_type,
      first_name: user.first_name,
      last_name: user.last_name,
      description: profile.description,
      organization: profile.organization,
      phone: profile.phone,
      facebook: profile.facebook,
      twitter: profile.twitter,
      linkedin: profile.linkedin,
      instagram: profile.instagram,
      website: profile.website,
      ratings_count: profile.ratings_count,
      ratings_value: profile.ratings_value,
      image: process.env.API_URL + profile.image
    }
  });
}