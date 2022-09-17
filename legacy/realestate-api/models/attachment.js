import fs from 'fs';

export default (sequelize, Sequelize) => {
  class Attachment extends Sequelize.Model {
    getFullUrls() {
      let small = this.small
      let medium = this.medium
      let big = this.big

      if (small && small.slice(0, 4) !== 'http') {
        small = process.env.API_URL + small
      }

      if (medium && medium.slice(0, 4) !== 'http') {
        medium = process.env.API_URL + medium
      }

      if (big && big.slice(0, 4) !== 'http') {
        big = process.env.API_URL + big
      }

      return {
        small,
        medium,
        big
      }
    }
  }

  const fields = {
    small: Sequelize.STRING,
    medium: Sequelize.STRING,
    big: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  Attachment.init(fields, options);

  Attachment.addHook('beforeDestroy', (attachment, options) => {
    attachment.small && fs.unlink(attachment.small, () => {});
    attachment.medium && fs.unlink(attachment.medium, () => {});
    attachment.big && fs.unlink(attachment.big, () => {});
  });

  return Attachment;
}
