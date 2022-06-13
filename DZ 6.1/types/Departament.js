const { GraphQLObjectType, GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
// const { dbQuery } = require('../database');

const DepartamentType = new GraphQLObjectType({
  name: 'Departament',
  fields:() => (
    {
      DepartamentId: { type: GraphQLInt },
      Name: { type: GraphQLString }
    }
  ) 
});

module.exports = DepartamentType;