const { GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { DepartamentType } = require('../../types');

const fieldsDepartaments = {
  type: new GraphQLList(DepartamentType),
  async resolve(_, {}){
    let res = await dbQuery(`SELECT * FROM departaments`);
    return res;
  }
};

module.exports = fieldsDepartaments;
