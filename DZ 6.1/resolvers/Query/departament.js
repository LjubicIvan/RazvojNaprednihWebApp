const { GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { DepartamentType } = require('../../types');

const fieldsDepartament = {
  type: DepartamentType,
  args: {
    ProfessorId: { type: GraphQLInt }
  },
  async resolve(_, { id }){
    let res = await dbQuery(`SELECT * FROM departaments WHERE DepartamentId = ${id}`);
    return res[0];
  }
};

module.exports = fieldsDepartament;
