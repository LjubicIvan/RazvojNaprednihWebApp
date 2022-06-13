const { GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { ProfessorType } = require('../../types');

const fieldsProfessor = {
  type: ProfessorType,
  args: {
    ProfessorId: { type: GraphQLInt }
  },
  async resolve(_, { id }){
    let res = await dbQuery(`SELECT * FROM professors WHERE ProfessorId = ${id}`);
    return res[0];
  }
};

module.exports = fieldsProfessor;
