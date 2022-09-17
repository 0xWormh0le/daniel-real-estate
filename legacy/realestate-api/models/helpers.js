import camelCase from 'lodash/camelCase'

export const toTypeObject = type => Object.assign({}, ...type.map(t => ({ [camelCase(t)]: t })))
