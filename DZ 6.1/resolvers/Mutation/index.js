const { GraphQLObjectType } = require('graphql');
const insertUser = require('./insertUser');
const insertCourse = require('./insertCourse');

const Mutation = new GraphQLObjectType({
  name: 'mutation',
  fields: {
    // Insert a new user record
    insertUser: insertUser,
    insertCourse: insertCourse
  }
});

module.exports = Mutation;
