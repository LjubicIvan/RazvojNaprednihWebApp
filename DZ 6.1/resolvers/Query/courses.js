const { GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { CourseType } = require('../../types');

const fieldsCourses = {
  type: new GraphQLList(CourseType),
  async resolve(_, {}){
    let res = await dbQuery(`SELECT * FROM courses`);
    return res;
  }
};

module.exports = fieldsCourses;
