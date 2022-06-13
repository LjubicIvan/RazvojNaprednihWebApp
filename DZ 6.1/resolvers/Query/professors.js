const { GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { ProfessorType } = require('../../types');

const fieldsProfessors = {
  type: new GraphQLList(ProfessorType),
  async resolve(_, {}){
    let res = await dbQuery(`SELECT * FROM professors`);
    return res;
  }
};

module.exports = fieldsProfessors;
